<?php if ( '1' == 1) : ?>
    <h2>IF eXPRESSION IS TRUE, TEXT IS VISIBLE </h2>
<?php endif; ?>

<?php if ( '1' == 1 ): ?>
<!--Show HTML code when expression is true -->
<?php else: ?>
<!--Show HTML code when expression is false -->
<?php endif ?>

<?php
$result = '1' == 1  ? 'This is true' : 'This is false';
echo $result;

// shorthand ternary
$result = $initial ?: $default;
