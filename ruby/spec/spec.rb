#require_relative "../monkey_trouble"
#require "monkey_trouble"
describe "ba" do 
	it "should return true if you are in trouble." do
		monkey_trouble(false,false).should be_true
		monkey_trouble(true,true).should be_true
	end
	it "should return false if you are not in trouble" do
		monkey_trouble(true,false).should_not be_true
	end
end