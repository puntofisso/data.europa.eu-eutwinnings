import unittest
import sqlite3

class TestEUTwinningsMethods(unittest.TestCase):

    def test_SQLdata_NUTS_official_number(self):
        # tests that the count corresponds to the official
        # count from https://ec.europa.eu/eurostat/web/nuts/background
        conn = sqlite3.connect('nuts.db')
        conn.row_factory = sqlite3.Row
        cur = conn.cursor()
        # NUTS3 must be 1166
        line1 = cur.execute("SELECT count (*) as count from NUTS where level=3 and nuts0 NOT IN ('IS', 'LI', 'NO', 'CH', 'ME', 'MK', 'AL', 'RS', 'TR', 'BA', 'XK', 'UK');")
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 1166)
        # NUTS2 must be 242
        line1 = cur.execute("SELECT count (*) as count from NUTS where level=2 and nuts0 NOT IN ('IS', 'LI', 'NO', 'CH', 'ME', 'MK', 'AL', 'RS', 'TR', 'BA', 'XK', 'UK');")
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 242)
        # NUTS1 must be 92
        line1 = cur.execute("SELECT count (*) as count from NUTS where level=1 and nuts0 NOT IN ('IS', 'LI', 'NO', 'CH', 'ME', 'MK', 'AL', 'RS', 'TR', 'BA', 'XK', 'UK');")
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 92)
        # NUTS0 must be 27
        line1 = cur.execute("SELECT count (*) as count from NUTS where level=0 and nuts0 NOT IN ('IS', 'LI', 'NO', 'CH', 'ME', 'MK', 'AL', 'RS', 'TR', 'BA', 'XK', 'UK');")
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 27)

    def test_SQLdata_NUTS(self):
        conn = sqlite3.connect('nuts.db')
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
        # NUTS1 must be 125
        line1 = cur.execute("SELECT count(*) as count FROM nuts WHERE level == :levelinput", {"levelinput": 1})
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 125)
        # NUTS0 must be 37
        line1 = cur.execute("SELECT count(*) as count FROM nuts WHERE level == :levelinput", {"levelinput": 0})
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 37)

    def test_SQLdata_similarity_total(self):
        # Expected similarity totals
        # Simple test; you could further test for each similarity level:
        # nuts3 2290682; nuts2 111222; nuts1 15500; nuts0 1332
        # but you don't need this directly because you're testing the pairs in the next test
        conn = sqlite3.connect('nuts.db')
        conn.row_factory = sqlite3.Row
        cur = conn.cursor()
        line1 = cur.execute("SELECT count(*) as count from similarity;")
        row1 = cur.fetchone()
        count = row1['count']
        self.assertEqual(count, 2418736)

    def test_SQLdata_similarity_pairs(self):
        # Expected similarity pairs
        ## Each NUTS 3 must have 1513 similarities
        conn = sqlite3.connect('nuts.db')
        conn.row_factory = sqlite3.Row
        cur = conn.cursor()
        line1 = cur.execute("select s.code1, count(*) as count, n.name, n.level as level from similarity s, nuts n where s.code1 = n.code group by code1;")
        rows = cur.fetchall()
        for row in rows:
            level = row['level']
            count = row['count']
            if level == '3':
                self.assertEqual(count, 1513)
            elif level == '2':
                self.assertEqual(count, 333)
            elif level == '1':
                self.assertEqual(count, 124)
            elif level == '0':
                self.assertEqual(count, 36)
            else:
                self.assertEqual(level, ['0','1','2','3'])

    def test_SQLdata_similarity_symmetry(self):
        # Check simmetry in similarity
        conn = sqlite3.connect('nuts.db')
        conn.row_factory = sqlite3.Row
        cur = conn.cursor()
        line1 = cur.execute("SELECT s1.similarity as sim1, s2.similarity as sim2 FROM similarity s1 JOIN similarity s2 WHERE s1.code1=s2.code2 AND s1.code2==s2.code1;")
        rows = cur.fetchall()
        for row in rows:
            sim1=row['sim1']
            sim2=row['sim2']
            self.assertEqual(sim1, sim2)

if __name__ == '__main__':
    unittest.main()
