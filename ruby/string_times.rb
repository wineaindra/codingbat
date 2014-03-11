def string_times(string,n)
	return string*n
end

puts string_times("Hi",2)=="HiHi" ? "pass" : "fail"
puts string_times("Hi",3)=="HiHiHi" ? "pass" : "fail"
puts string_times("Hi",1)=="Hi" ? "pass" : "fail"
