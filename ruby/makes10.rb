def makes10(a,b)
	return a==10 || b==10 || a+b==10
end
puts makes10(9,10) ? "pass" : "fail"
puts makes10(9,9) ? "fail" : "pass"
puts makes10(9,1) ? "pass" : "fail"
puts makes10(1,2) ? "fail" : "pass"
puts makes10(5,5) ? "pass" : "fail"
puts makes10(10,10) ? "pass" : "fail"