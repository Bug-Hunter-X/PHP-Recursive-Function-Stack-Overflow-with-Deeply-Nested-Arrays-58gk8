```php
function processData(array $data): array {
  // ... some code to process the data ...

  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value); // Recursive call without check
    }
  }

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