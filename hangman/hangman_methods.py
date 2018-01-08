def output_spaces(spaces):
  space_list = []
  for s in range(spaces):
    space_list.append('_')
  
  return space_list

def guess(spaces_list, secret_word, user_guess, num_remaining, misses):
  for s in range(len(secret_word)):
    if user_guess == secret_word[s]:
      spaces_list[s] = user_guess
      num_remaining -= 1
      return [num_remaining, spaces_list, misses]

  for q in range(len(secret_word)):
    if user_guess != secret_word[q]:
      misses += 1
      break
  
  return [num_remaining, spaces_list, misses]

def hangman_icon(misses):
  if misses == 1:
    print('O')
  if misses == 2:
    print('O')
    print('|')
  if misses == 3:
    print(' O')
    print(' |')
    print('/')
  if misses == 4:
    print(' O')
    print(' |')
    print("/ /")
  if misses == 5:
    print("Oh. No.")





# O

#  O
#  |

#  O
#  |
# / 

#  O
#  |
# / \
