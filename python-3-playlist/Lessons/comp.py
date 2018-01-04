prizes = [5, 10, 100, 500, 1000]

# dbl_prizes = []
# for p in prizes:
#   dbl_prizes.append(p * 2)

# print(dbl_prizes)

dbl_prizes = [p * 2 for p in prizes]
print(dbl_prizes)

nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

square_even_nums = []
for n in nums:
  if (n ** 2) % 2 == 0:
    square_even_nums.append(n ** 2)
print(square_even_nums)

square_even_nums2 = [n ** 2 for n in nums if (n ** 2) % 2 == 0 ]
print(square_even_nums2)