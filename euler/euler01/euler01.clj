// from user philbooo on project euler.net, 09 Sep 2012
(defn sum-multiples [multiples candidate limit total]
  (if (< candidate limit)
    (if (some #(= (rem candidate %) 0) multiples)
      (sum-multiples multiples (+ candidate 1) limit (+ candidate total))
      (sum-multiples multiples (+ candidate 1) limit total))
    total))

(println (sum-multiples [3 5] 1 1000 0))
