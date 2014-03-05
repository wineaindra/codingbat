def sleep_in(is_weekday,is_on_vacation)
	if is_weekday==false || is_on_vacation==true
		return true	
	end 
end
puts sleep_in(false, false) ? "pass" : "fail"
puts sleep_in(true, false) ? "fail" : "pass" 
puts sleep_in(false, true) ? "pass" : "fail"