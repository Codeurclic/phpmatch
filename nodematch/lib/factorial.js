function factorial(n)
{
    var f=1;
    var i=2;
    while(i<=n)
    {
        f=f*i;
        i++;
    }
    return f;
}
exports.factorial=factorial;
