<?php

namespace PhpWebFramework\views\user;

use PhpWebFramework\views\View;

/**
 * Class UserLogoutView
 * Represents the view for user logout.
 */
class UserLogoutView extends View
{
    
    /**
     * Renders the logout page.
     */
    public static function render(): void
    {
        parent::header('Logout'); ?>
        <!-- Page Specific Content -->
        <div class="alert alert-success" role="alert">
            You have successfully been logged out. Thank you for visiting!
        </div>
        <?php
        parent::footer();
    }
}
