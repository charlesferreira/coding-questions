# Count Triplets

You are given an array `arr`, and you need to find number of triplets of
indices `(i, j, k)` such that the elements at those indices are in geometric
progression for a given common ratio `r` and `i < j < k`.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|

## Examples

### Example 1

#### Input

```javascript
arr = [1, 4, 16, 64]
r = 4
```

#### Output

```javascript
2 // triplets are [1, 4, 16] and [4, 16, 64] at indices (0, 1, 2) and (1, 2, 3) 
```

### Example 2

#### Input

```javascript
arr = [1, 2, 2, 4]
r = 2
```

#### Output

```javascript
2
```

### Example 3

#### Input

```javascript
arr = [1, 3, 9, 9, 27, 81]
r = 3
```

#### Output

```javascript
6
```

### Example 4

#### Input

```javascript
arr = [1, 5, 5, 25, 125]
r = 5
```

#### Output

```javascript
4
```