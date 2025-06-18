<?php

namespace Sunnysideup\GitIgnore;

use SilverStripe\Control\Director;
use SilverStripe\Core\Flushable;

class AddGitIgnore implements Flushable
{

    private const GITIGNORE_MARKER = "# Below is auto-added by the SilverStripe Gitignore module, do not remove this line, do not change anything below.";

    public static function flush()
    {
        if (Director::isDev()) {
            if (Director::is_cli()) {
                $marker = self::GITIGNORE_MARKER;

                $base = Director::baseFolder();
                $targetPath = $base . '/.gitignore';
                $sourcePath = $base . '/vendor/sunnysideup/gitignore/.gitignore';

                $existing = file_exists($targetPath) ? file_get_contents($targetPath) : '';
                $replacement = file_exists($sourcePath) ? file_get_contents($sourcePath) : '';

                if ($replacement === '') {
                    return;
                }

                $before = explode($marker, $existing, 2)[0];
                $beforeLines = array_map('trim', explode("\n", $before));
                $replacementLines = array_map('trim', explode("\n", $replacement));

                // Remove from $before any lines that also exist in $replacement
                $filteredBeforeLines = array_filter(
                    $beforeLines,
                    fn(string $line) => $line === '' || !in_array($line, $replacementLines, true)
                );
                $filteredBeforeLines = array_filter($filteredBeforeLines);

                $newContent = implode("\n", $filteredBeforeLines) . "\n\n" . $marker . "\n\n" . $replacement;

                file_put_contents($targetPath, $newContent);
            }
        } else {
            user_error('This module (sunnysideup/gitignore) should only be included as a dev dependency.', E_USER_ERROR);
        }
    }
}
