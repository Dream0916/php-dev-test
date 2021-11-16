<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

/**
 * Template for common header content
 */
class Footer implements Template
{
    public function render(Context $context): string
    {
        $year = date('Y');

        // @codingStandardsIgnoreStart
        return <<<HTML
            </div>
        </main>
        <footer class="footer">
            <small class="copyright">© {$year} silverorange, Inc. — All rights reserved.</small>
        </footer>
    </body>
</html>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
