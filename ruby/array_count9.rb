def array_count9(arr)
	return arr.count(9)
end
puts array_count9([1,2,9])==1 ? "pass" : "fail"
puts array_count9([1,9,9])==2 ? "pass" : "fail"
puts array_count9([1,9,9,3,9])==3 ? "pass" : "fail"
