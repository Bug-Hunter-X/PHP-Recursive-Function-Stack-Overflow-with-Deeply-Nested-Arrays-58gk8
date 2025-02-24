```php
function processData(array $data, int $maxDepth = 10): array {
  static $depth = 0;
  $depth++;

  if ($depth > $maxDepth) {
    trigger_error("Maximum recursion depth exceeded", E_USER_WARNING);
    return $data;
  }

  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value, $maxDepth); 
    }
  }

  $depth--;
  return $data;
}

$nestedArray = [
  'a' => 1,
  'b' => [
    'c' => 2,
    'd' => [
      'e' => 3
    ]
  ]
];

$result = processData($nestedArray);
print_r($result);
```