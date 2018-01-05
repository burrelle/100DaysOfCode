from random import shuffle

words = ['beetroot', 'carrots', 'potatoes']
anagrams = []

def jumble(word):
  anagram = list(word)
  shuffle(anagram)
  return ''.join(anagram)


# for word in words:
#   anagrams.append(jumble(word))
# print(anagrams)

print(list(map(jumble, words)))