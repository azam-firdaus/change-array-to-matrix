# change-array-to-matrix
##### _Change an array to matrix array based on provided value for matrix size_
.

## Setup

- Say you have an array of data, you want to categorized it in a matrix/2-dimentional array of equal size.
Example, array (A,B,C,D,E,R,E,T,W,E,T,W), and you want to divide it in equal array of 4.
- The code will divide the array values by taking the first value to first matrix, second value to second matrix, third value to third matrix, and fourth value to fourth matrix. And the fifth value will cycle back to first matrix.
- For the array example, it will resulted in following matrix

From here
```
A, B, C, D, E, R, E, T, W, E, T, W
```
```
A, E, W 
B, R, E 
C, E, T 
D, T, W
```
