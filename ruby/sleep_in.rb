def sleep_in(is_weekday,is_on_vacation)
	return !is_weekday || is_on_vacation
end
puts sleep_in(false, false) ? "pass" : "fail"
puts sleep_in(true, false) ? "fail" : "pass" 
puts sleep_in(false, true) ? "pass" : "fail"