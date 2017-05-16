var assert = require("assert");
var arr=[1,2,3,4,5];
describe('Array', function()
{
    describe('#indexOf()', function(){
    it('Returns -1 when value not present in array', function(){
        assert.equal(-1, arr.indexOf(12));})
    it('Returns -1 when value not present in array', function(){
        assert.equal(-1, arr.indexOf(1),'Number is present in the array');})
    it('Returns the index of the number searched', function(){
        assert.equal(1, arr.indexOf(2));})
    it('Returns the index of the number searched', function(){
        assert.equal(4, arr.indexOf(5));})
    })
})
