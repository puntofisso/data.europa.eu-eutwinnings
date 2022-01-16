import unittest
import sqlite3

class TestStringMethods(unittest.TestCase):

    # def test_upper(self):
    #     self.assertEqual('foo'.upper(), 'FOO')
    #
    # def test_isupper(self):
    #     self.assertTrue('FOO'.isupper())
    #     self.assertFalse('Foo'.isupper())
    #
    # def test_split(self):
    #     s = 'hello world'
    #     self.assertEqual(s.split(), ['hello', 'world'])
    #     # check that s.split fails when the separator is not a string
    #     with self.assertRaises(TypeError):
    #         s.split(2)

    def test_SQLdata(self):
        conn = sqlite3.connect('nuts-functioning-16-1.db')
        conn.row_factory = sqlite3.Row
        cur = conn.cursor()
        # NUTS3 must be 1514
        line1 = cur.execute("SELECT count(*) as count FROM nuts WHERE level == :levelinput", {"levelinput": 3})
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 1514)
        # NUTS2 must be 334
        line1 = cur.execute("SELECT count(*) as count FROM nuts WHERE level == :levelinput", {"levelinput": 2})
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 334)



if __name__ == '__main__':
    unittest.main()
