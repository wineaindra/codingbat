def parrot_trouble(is_talking,time)
	return is_talking && (time<7 || time>20)
end
puts parrot_trouble(true,6) ? "pass" : "fail"
puts parrot_trouble(true,7) ? "fail" : "pass"
puts parrot_trouble(false,6) ? "fail" : "pass"
puts parrot_trouble(true,23) ? "pass" : "fail"
puts parrot_trouble(false,23) ? "fail" : "pass"