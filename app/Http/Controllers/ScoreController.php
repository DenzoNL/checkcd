<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RipLogChecker\RipLogChecker;
use RipLogChecker\Scorers\BaseScorer;

class ScoreController extends Controller
{
    public function getScore(Request $request)
    {
        $log = $request->log;
        if(is_null($log))
        {
            return view('score')->with([
                    'json' => 'No log file submitted'
                ]);
        }
        else {
            $logChecker = new RipLogChecker($log);
            $json = $logChecker->getScorer()->getParser()->getJson();
            $errors = $logChecker->getScorer()->getErrors();
            ksort($errors);
            $errorMessages = BaseScorer::$errorMessages;
            $score = $logChecker->getScore();

            return view('score')->with([
                'json' => $json,
                'errors' => $errors,
                'errorMessages' => $errorMessages,
                'score' => $score
            ]);
        }
    }
}
