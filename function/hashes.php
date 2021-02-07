<?php

function hashes($hashes)
{
    echo password_hash($hashes, PASSWORD_DEFAULT);
}
