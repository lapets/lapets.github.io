module HW5Tests where

import Allocation

allTests = [
  show (failed ordTests),
  show (failed contentsDepthFinalTestsIntegerState),
  show (failed contentsDepthFinalTests),
  show (failed greedyTests),
  show (failed patientTests),
  show (failed optimalTests),
  show (failed metaTests)
  ]

-- To get the failures for an individual test, query that
-- test using "failed", e.g.:
-- 
-- *> failed ordTests

failed :: Eq a => [(Integer, a, a)] -> [(Integer, a, a)]
failed tests = [(n, x, y) | (n, x, y) <- tests, x /= y]

ordTests = [
  (1, Alloc 0 0 <= Alloc 5 5, True),
  (2, Alloc 1 4 < Alloc 5 10, True),
  (3, Finish "b" < Finish "a", False),
  (3, Finish 456 > Finish 123, True),
  (3, Finish (Alloc 4 8) < Finish (Alloc 1 14), True),
  (3, Finish (Alloc 4 8) < Finish (Alloc 1 14), True),
  (4, Finish (Alloc 9 1) < Finish (Alloc 13 12), False),
  (5, max (Finish (Alloc 9 1)) (Finish (Alloc 13 12)) == Finish (Alloc 9 1), True)
  ]

contentsDepthFinalTestsIntegerState = [
  (1, contents (Branch 1 (Finish 0) (Finish 0)), 1),
  (1, sum (depth 1 (Branch 1 (Finish 2) (Finish 3))), 5),
  (1, sum (final (Branch 1 (Branch 1 (Finish 2) (Finish 3)) (Branch 1 (Finish 2) (Finish 3)))), 10)
  ]
  
contentsDepthFinalTests = [
  (1, contents (graph (Alloc 0 0) [2,5,6,2,5,4,1,6]), Alloc 0 0),
  (2, contents (Finish (Alloc 1 2)), Alloc 1 2),
  (3, minimum (depth 3 (graph (Alloc 0 0) [2,5,6,2,5,4,1,6])), Alloc 7 6),
  (4, maximum (final (graph (Alloc 0 0) [1,4,3,1,7,3,4,4])), Alloc 0 27),
  (5, minimum (depth 5 (graph (Alloc 0 0) [1..])), Alloc 7 8)
  ]
  
greedyTests = [
  (1, (\(Alloc a b) -> abs(a-b)) $ contents (greedy (graph (Alloc 3 0) [2,1])), 1),
  (2, (\(Alloc a b) -> abs(a-b)) $ contents (greedy (greedy (graph (Alloc 3 0) [1,2]))), 0),
  (3, (\(Alloc a b) -> abs(a-b)) $ contents (greedy (greedy (graph (Alloc 0 0) [5,2]))), 3),
  (4, (\(Alloc a b) -> abs(a-b)) $ contents (greedy (graph (Alloc 0 0) [10,12,13])), 10),
  (5, (\(Alloc a b) -> abs(a-b)) $ contents (greedy $ greedy $ greedy $ greedy (graph (Alloc 0 0) [1..])), 2)
  ]

patientTests = [
  (1, (\(Alloc a b) -> abs(a-b)) $ contents (patient 0 (graph (Alloc 3 0) [2])), 3),
  (2, (\(Alloc a b) -> abs(a-b)) $ contents (patient 4 (graph (Alloc 3 0) [2,1,3,2,1])), 1),
  (3, (\(Alloc a b) -> abs(a-b)) $ contents (patient 3 (graph (Alloc 0 0) [1,4,3])), 0)
  ]
  
optimalTests = [
  (1, (\(Alloc a b) -> abs(a-b)) $ contents (optimal (graph (Alloc 0 0) [2,1,3,2,1])), 1),
  (2, (\(Alloc a b) -> abs(a-b)) $ contents (optimal (graph (Alloc 9 0) [2,1,3,2,1])), 0),
  (3, (\(Alloc a b) -> abs(a-b)) $ contents (optimal (graph (Alloc 0 0) [2,5,6,2,5,4,1,6])), 1),
  (4, (\(Alloc a b) -> abs(a-b)) $ contents (optimal (graph (Alloc 0 0) [2,5,6,2,5,4,1,6,2,4,1,4,1,6])), 1)
  ]
  
metaTests = [
  (1, (\(Alloc a b) -> abs(a-b)) $ contents (metaRepeat 4 greedy (graph (Alloc 0 0) [1..])), 2),
  (2, (\(Alloc a b) -> abs(a-b)) $ contents (metaRepeat 1000 greedy (graph (Alloc 0 0) [1..])), 500),
  (3, (\(Alloc a b) -> abs(a-b)) $ contents $ (patient 4) (graph (Alloc 0 0) [1,3,5,18,11]), 9),
  (4, (\(Alloc a b) -> abs(a-b)) $ contents (metaCompose (patient 2) (patient 2) (graph (Alloc 0 0) [1,3,5,18,11])), 11),
  (5, (\(Alloc a b) -> abs(a-b)) $ contents (metaRepeat 4 (patient 2) (graph (Alloc 0 0) [1..8])), 0),
  (6, (\(Alloc a b) -> abs(a-b)) $ contents (metaRepeat 500 (patient 2) (graph (Alloc 0 0) [1..])), 0),
  (7, (\(Alloc a b) -> abs(a-b)) $ contents (metaGreedy optimal (metaRepeat 5 greedy) (graph (Alloc 0 0) [2,1,3,2,1])), 1),
  (8, (\(Alloc a b) -> abs(a-b)) $ contents (metaGreedy optimal (metaRepeat 5 greedy) (graph (Alloc 0 0) [6,1,7,2,6])), 2),
  (9, (\(Alloc a b) -> abs(a-b)) $ contents (metaGreedy (patient 2) (metaRepeat 2 greedy) (graph (Alloc 0 0) [6,1,7,2,6])), 5)
  ]
  
--eof