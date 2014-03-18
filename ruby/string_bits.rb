def string_bits(str)
	result=""
	i=0
	while i < str.length
		result << str[i]
		i+=2
	end
	return result
end
