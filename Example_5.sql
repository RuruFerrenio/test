
-- create t1
CREATE TABLE t1 (
  i1 INTEGER PRIMARY KEY,
  c1 TEXT NOT NULL
);

-- insert t1
INSERT INTO t1 VALUES (0001, 'a');
INSERT INTO t1 VALUES (0002, 'b');
INSERT INTO t1 VALUES (0003, 'c');

-- fetch t1
SELECT * FROM t1;

-- create t2
CREATE TABLE t2 (
  i2 INTEGER PRIMARY KEY,
  c2 TEXT NOT NULL
);

-- insert t2
INSERT INTO t2 VALUES (0002, 'c');
INSERT INTO t2 VALUES (0003, 'b');
INSERT INTO t2 VALUES (0004, 'a');

-- fetch t2
SELECT * FROM t2;

-- part 1
SELECT *
  FROM t1 
    LEFT JOIN t2 
      ON t1.i1=t2.i2;

-- part 2
SELECT i1 AS i3, c1 AS c3 
  FROM t1 INNER JOIN t2  
    ON t1.i1 = t2.i2 
      UNION ALL SELECT i2 AS i3, c2 AS c3 
        FROM t2 INNER JOIN t1  
          ON t1.i1 = t2.i2



	     




