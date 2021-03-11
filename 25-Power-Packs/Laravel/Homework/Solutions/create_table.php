<?php

/* This script demonstrates the commands required to create an tinker with a 
 * test table.
 *
 * It drops the table on exit, so you don't have to worry about cleanup.*/
DB::statement('create table todos (description text, completed boolean)');
echo("Created table 'todos'.\n");

/* DB::insert(insert_statement, [ values ]) takes an insert statement, and
 *   then an array of values to insert. 
 *
 * The question marks are like "wildcards", which are replaced by the contents
 * of your values array.
 *   */
DB::insert('insert into todos (description, completed) values (?, ?)', ['Homework', 0]);
echo("Inserted test record'.\n");

DB::select('select * from todos');
echo("Retrieved records from 'todos'.\n");

DB::statement('drop table todos');
echo("Dropped table 'todos'.\n");

echo(str_repeat('=', 20) . "\n");

echo("All's well with your connection! Keep tinkering. Godspeed.\n");

exit();
