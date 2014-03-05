def monkey_trouble(a_smile, b_smile)
	if (a_smile==true && b_smile==true)
		return true
		elsif (a_smile==false && b_smile==false)
		return true
		else
		return false	
	end	
end
puts monkey_trouble(false,false) ? "In trouble": "Not in trouble"
puts monkey_trouble(true,true) ? "In trouble" : "Not in trouble"
puts monkey_trouble(true,false) ? "In trouble" : "Not in trouble"