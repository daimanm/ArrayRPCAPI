<?php
require_once("rpcapi.php");
$rpcapi = new rpcapi("RPChost", "RPCport", "RPCusername", "RPCpassword");
print_r($rpcapi->make_call());
