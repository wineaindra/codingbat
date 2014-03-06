def near_hundred(n)
	return ((n-100).abs <= 10) || (n-200).abs <= 10
end
puts near_hundred(93) ? "pass" : "fail"
puts near_hundred(80) ? "fail" : "pass"
puts near_hundred(89) ? "fail" : "pass"
puts near_hundred(198) ? "pass" : "fail"
puts near_hundred(230) ? "fail" : "pass"
puts near_hundred(202) ? "pass" : "fail"