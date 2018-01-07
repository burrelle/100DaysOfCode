import unittest
from hangman_methods import output_spaces, guess

class RpsTest(unittest.TestCase):
  
  def test_spaces(self):
    #test the number of spaces added from a word. 
    self.assertEqual(len(output_spaces(5)), 5)

  def test_guess_correct(self):
    spaces_list = ['_','_','_','_']
    spaces_list_expected = ['f','_','_','_']
    secret_word = 'fish'
    user_guess = 'f'
    num_remaining = 4
    self.assertEqual(guess(spaces_list, secret_word, user_guess, num_remaining), [3, spaces_list_expected] )

  def test_guess_incorrect(self):
    spaces_list = ['_','_','_','_']
    secret_word = 'fish'
    user_guess = 'q'
    num_remaining = 4
    self.assertEqual(guess(spaces_list, secret_word, user_guess, num_remaining), [4, spaces_list] )

  # def test_error_active(self):
  #   #error caught
  #   self.assertTrue(error(1))

  # def test_error_inactive(self):
  #   self.assertFalse(error('c'))

if __name__ == '__main__':
    unittest.main()
