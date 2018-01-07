def output_spaces(spaces):
  space_list = []
  for s in range(spaces):
    space_list.append('_')
  
  return space_list

def guess(spaces_list, secret_word, user_guess, num_remaining):
  for s in range(len(secret_word)):
    if user_guess == secret_word[s]:
      spaces_list[s] = user_guess
      num_remaining -= 1
  return [num_remaining, spaces_list]




# O

#  O
#  |

#  O
#  |
# / 

#  O
#  |
# / \
