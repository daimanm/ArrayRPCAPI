# ArrayRPCAPI

# Configuration
Edit the router.php file with your Array wallet RPC credentials. Upload your .htacces, router.php and rpcapi.php to your host.


# Endpoints:
  
You could use all the commands from the Array wallet.

# Some examples:

```/getbalance```
```
Array
(
    [result] => 8.47694828
    [error] => 
    [id] => 1
)
```

```/sendtoaddress/Ah6BXjBgKsn7qVHfHYtkesgr9VJfLiEmnc/1.1```
```
Array
(
    [result] => caa3b2e778db8a488d181bbe926117a9c6757ec3484bd16356acbad8ebad7372
    [error] => 
    [id] => 1
)
```


```/getinfo```
```
Array
(
    [result] => Array
        (
            [version] => 1000000
            [protocolversion] => 70013
            [walletversion] => 130000
            [balance] => 8.47694828
            [blocks] => 67714
            [timeoffset] => 0
            [connections] => 11
            [proxy] => 
            [difficulty] => Array
                (
                    [proof-of-work] => 0.00024413713253701
                    [proof-of-stake] => 7460.2604116004
                )

            [testnet] => 
            [keypoololdest] => 1627311337
            [keypoolsize] => 100
            [paytxfee] => 0
            [relayfee] => 0.0001
            [errors] => 
        )

    [error] => 
    [id] => 1
)
```
