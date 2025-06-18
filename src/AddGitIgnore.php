<?php

namespace Sunnysideup\GitIgnore;

class AddGitIgnore implements Flushable
{

    public static function flush()
    {
        if (Director::isDev()) {
            if (Director::isCli()) {
                $file = BASE_PATH . '/.gitignore';
                $content .= file_get_contents(Director::baseFolder . '/vendor/sunnysideup/gitignore/.gitignore') ?: '';
                $content = file_get_contents($file, $content);
            } else {
                user_error('This should only be included as a dev dependency.', E_USER_ERROR);
            }
        }
    }
}
