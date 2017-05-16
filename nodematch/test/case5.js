// sync test of factorial
var assert=require('assert');
var fact=require('../lib/factorial').factorial;
describe('find factorial',function(){
    it('returns the factorial of 8',
            function(){ assert.equal(40320,fact(8));});
    it('returns the factorial of 5',
            function(){ assert.equal(120,fact(5));});
});
