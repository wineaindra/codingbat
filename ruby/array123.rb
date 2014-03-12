def array123(arr)
	return arr.include?(1) && arr.include?(2) && arr.include?(3)
end
puts array123([1, 1, 2, 3, 1]) ? "pass" : "fail"
puts array123([1, 1, 2, 4, 1]) ? "fail" : "pass"
puts array123([1, 1, 2, 1, 2, 3]) ? "pass" : "fail"