<?php if ($autodetect): ?><script src="<?php echo $autodetect; ?>" defer></script>
<?php endif; ?><?php if ($jquery): ?><script src="<?php echo $jquery; ?>"></script>
<?php endif; ?><?php if ($timeago): ?><script src="<?php echo $timeago; ?>" defer></script>
<?php endif; ?><?php if ($recaptcha_api): ?><script src="<?php echo $recaptcha_api; ?>" async defer></script>
<?php endif; ?><?php if ($highlight): ?><script src="<?php echo $highlight; ?>" defer></script>
<?php endif; ?><script src="<?php echo $common; ?>" defer></script><link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>"><?php if ($custom): ?><link rel="stylesheet" type="text/css" href="<?php echo $custom; ?>">
<?php endif; ?>