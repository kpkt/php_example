<?php
/*
 *
 * TABLE : users
 * PK : id
 * FK dep_id
 *
 * TABLE : departments
 * PK : id
 *
 * SELECT:
 *
 * Select * FROM users
 * Select * FROM users WHERE id=5;
 * Select id, name FROM users;
 * Select id as ID, name as NAMA_PENUH FROM users;
 *
 * Select * FROM departments
 * Select * FROM departments WHERE id=1;
 *
 * SELECT * FROM users
 * JOIN department ON department.id = users.dep_id;
 *
 *
 */