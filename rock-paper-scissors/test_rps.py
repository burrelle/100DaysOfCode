from rps import battle, choice
import unittest


class RpsTest(unittest.TestCase):

  # Test if there is a draw
    def test_battle_draw_rock(self):
        # print('\nDraw unit tests: ')
        # print('Rock and Rock')
        result = battle('r', 'r')
        self.assertEqual(result, "It's a draw!")

    def test_battle_draw_paper(self):
        # print('Paper and Paper')
        result = battle('p', 'p')
        self.assertEqual(result, "It's a draw!")

    def test_battle_draw_scissors(self):
        # print('Scissors and Scissors')
        result = battle('s', 's')
        self.assertEqual(result, "It's a draw!")

  # Test if there is a rock win
    def test_battle_win_rock(self):
        result = battle('r', 's')
        self.assertEqual(result, 'Rock beats scissors')

    def test_battle_win_rock1(self):
        result = battle('s', 'r')
        self.assertEqual(result, 'Rock beats scissors')

  # Test if there is a paper win
    def test_battle_win_paper(self):
        result = battle('p', 'r')
        self.assertEqual(result, 'Paper covers rock')

    def test_battle_win_paper1(self):
        result = battle('r', 'p')
        self.assertEqual(result, 'Paper covers rock')

  # Test if there is a scissors win
    def test_battle_win_sci(self):
        result = battle('p', 's')
        self.assertEqual(result, 'Scissors cut paper')

    def test_battle_win_sci1(self):
        result = battle('s', 'p')
        self.assertEqual(result, 'Scissors cut paper')

  # Test choice returns the correct values
    def test_choice_correct_p1(self):
        result = choice(1, 'r')
        self.assertEqual(result, 'r')

    def test_choice_incorrect_p2(self):
        result = choice(2, 'q')
        self.assertNotEqual(result, 'q')


if __name__ == '__main__':
    unittest.main()
