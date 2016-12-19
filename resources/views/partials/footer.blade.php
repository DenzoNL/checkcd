<?php
    $git_rev = exec('git rev-parse HEAD');
    $git_short_rev = exec('git rev-parse --short HEAD');
    $rlc_ver = \RipLogChecker\RipLogChecker::getVersion();
?>
<footer class="footer">
    <div class="container">
        <div class="col-md-6">
            <p class="footer-text">CheckCD.rip <a
                        href="https://github.com/DenzoNL/checkcd/commit/{{ $git_rev }}">{{ $git_short_rev }}</a>
                <br/>riplogchecker <a href="https://github.com/DenzoNL/riplogchecker/releases/tag/{{ $rlc_ver }}">{{ $rlc_ver }}</a>
            </p>
        </div>
    </div>
</footer>