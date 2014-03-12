def array_front9(arr)
	return arr[0..3].include?(9)
end
puts array_front9([1, 2, 9, 3, 4]) ? "pass" : "fail"
puts array_front9([1, 2, 3, 4, 9]) ? "fail" : "pass"
puts array_front9([1, 2, 3, 4, 5]) ? "fail" : "pass"