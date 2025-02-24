# PHP Recursive Function Stack Overflow with Deeply Nested Arrays

This repository demonstrates a common error in PHP involving stack overflow exceptions that can occur when working with recursive functions and deeply nested arrays.  The `processData` function attempts to recursively process a nested array, but lacks proper checks to prevent infinite recursion or excessively deep recursion that exceeds PHP's stack limit.

The `bug.php` file contains the problematic code. The `bugSolution.php` file provides a corrected version with improved error handling and recursion depth control.  This example highlights the importance of handling edge cases and managing recursion depth effectively to prevent unexpected crashes.