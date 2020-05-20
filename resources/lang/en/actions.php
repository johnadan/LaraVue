<?php

$actions = [
    'abort' => 'Abort',
    'activate' => 'Activate',
    'add' => 'Add',
    'apply' => 'Apply',
    'approve' => 'Approve',
    'archive' => 'Archive',
    'back' => 'Back',
    'browse' => 'Browse',
    'buy' => 'Buy',
    'cancel' => 'Cancel',
    'change' => 'Change',
    'check' => 'Check',
    'checkout' => 'Checkout',
    'choose' => 'Choose',
    'clear' => 'Clear',
    'click' => 'Click',
    'close' => 'Close',
    'connect' => 'Connect',
    'confirm' => 'Confirm',
    'continue' => 'Continue',
    'copy' => 'Copy',
    'create' => 'Create',
    'customize' => 'Customize',
    'deactivate' => 'Deactivate',
    'delete' => 'Delete',
    'deliver' => 'Deliver',
    'disable' => 'Disable',
    'disapprove' => 'Disapprove',
    'download' => 'Download',
    'edit' => 'Edit',
    'enable' => 'Enable',
    'enter' => 'Enter',
    'estimate' => 'Estimate',
    'export' => 'Export',
    'filter' => 'Filter',
    'filter_by' => 'Filter by',
    'get' => 'Get',
    'go' => 'Go',
    'import' => 'Import',
    'list' => 'List',
    'load' => 'Load',
    'loading' => 'Loading',
    'load_more' => 'Load more',
    'login' => 'Log in',
    'logout' => 'Log out',
    'manage' => 'Manage',
    'mark' => 'Mark',
    'more' => 'More',
    'new' => 'New',
    'next' => 'Next',
    'pay' => 'Pay',
    'preview' => 'Preview',
    'previous' => 'Previous',
    'print' => 'Print',
    'proceed' => 'Proceed',
    'read' => 'Read',
    'refresh' => 'Refresh',
    'register' => 'Register',
    'remember' => 'Remember',
    'remember_me' => 'Remember me',
    'remove' => 'Remove',
    'reset' => 'Reset',
    'return' => 'Return',
    'return_listing' => 'Return to listing',
    'save' => 'Save',
    'save_add' => 'Save and add another',
    'save_close' => 'Save and close',
    'save_continue' => 'Save and continue',
    'scan' => 'Scan',
    'schedule' => 'Schedule',
    'search' => 'Search',
    'select' => 'Select',
    'send' => 'Send',
    'set' => 'Set',
    'setup' => 'Setup',
    'share' => 'Share',
    'shop' => 'Shop',
    'show' => 'Show',
    'show_all' => 'Show all',
    'sign_in' => 'Sign in',
    'sign_out' => 'Sign out',
    'sign_up' => 'Sign up',
    'start' => 'Start',
    'sort' => 'Sort',
    'sort_by' => 'Sort by',
    'submit' => 'Submit',
    'subtract' => 'Subtract',
    'tag_paid' => 'Tag as paid',
    'update' => 'Update',
    'upload' => 'Upload',
    'use' => 'Use',
    'view' => 'View',
    'view_all' => 'View all',
    'void' => 'Void',
    'yes' => 'Yes, I\'m sure',
];

$text = [];
foreach ($actions as $ndx => $value) {
    switch ($ndx) {
        case 'back':
            $text[$ndx] = 'Back to :text';
            break;
        case 'return_listing':
            $text[$ndx] = 'Return to :text listing';
            break;
        case 'tag_paid':
            $text[$ndx] = 'Tag :text as paid';
            break;
        default:
            $text[$ndx] = $value .' :text';
    }    
}

$actions['text'] = $text;

return $actions;