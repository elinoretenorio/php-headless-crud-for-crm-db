curl -X GET "localhost:8080/contact"

curl -X POST "localhost:8080/contact" -H 'Content-Type: application/json' -d'
{
  "address": "behind",
  "address_city": "individual",
  "address_country": "money",
  "address_state": "management",
  "address_street_1": "control",
  "address_street_2": "newspaper",
  "address_zip": 5995,
  "background_info": "Win must win. General leg economy offer. Something similar mention as behavior character.",
  "budget": 897.344704,
  "company": "usually",
  "contact_first": "somebody",
  "contact_last": "maybe",
  "contact_middle": "right",
  "contact_title": "century",
  "date_of_initial_contact": "2021-10-30",
  "deliverables": "others",
  "email": "kimpatrick@example.net",
  "industry": "happen",
  "lead_referral_source": "myself",
  "linkedin_profile": "miss",
  "phone": "behind",
  "project_description": "Water place hope dark account way control eight.",
  "project_type": "those",
  "proposal_due_date": "2021-10-30",
  "rating": 148.3,
  "sales_rep": 6681,
  "status": 4890,
  "title": "radio",
  "website": "one"
}
'

curl -X POST "localhost:8080/contact/5182" -H 'Content-Type: application/json' -d'
{
  "address": "behind",
  "address_city": "individual",
  "address_country": "money",
  "address_state": "management",
  "address_street_1": "control",
  "address_street_2": "newspaper",
  "address_zip": 5995,
  "background_info": "Win must win. General leg economy offer. Something similar mention as behavior character.",
  "budget": 897.344704,
  "company": "usually",
  "contact_first": "somebody",
  "contact_last": "maybe",
  "contact_middle": "right",
  "contact_title": "century",
  "date_of_initial_contact": "2021-10-30",
  "deliverables": "others",
  "email": "kimpatrick@example.net",
  "id": 5182,
  "industry": "happen",
  "lead_referral_source": "myself",
  "linkedin_profile": "miss",
  "phone": "behind",
  "project_description": "Water place hope dark account way control eight.",
  "project_type": "those",
  "proposal_due_date": "2021-10-30",
  "rating": 148.3,
  "sales_rep": 6681,
  "status": 4890,
  "title": "radio",
  "website": "one"
}
'

curl -X GET "localhost:8080/contact/5182"

curl -X DELETE "localhost:8080/contact/5182"

# --

curl -X GET "localhost:8080/contact-status"

curl -X POST "localhost:8080/contact-status" -H 'Content-Type: application/json' -d'
{
  "status": "right"
}
'

curl -X POST "localhost:8080/contact-status/5959" -H 'Content-Type: application/json' -d'
{
  "id": 5959,
  "status": "right"
}
'

curl -X GET "localhost:8080/contact-status/5959"

curl -X DELETE "localhost:8080/contact-status/5959"

# --

curl -X GET "localhost:8080/notes"

curl -X POST "localhost:8080/notes" -H 'Content-Type: application/json' -d'
{
  "contact": 9221,
  "date": "2021-11-05",
  "is_new_todo": 5041,
  "notes": "Staff film score style require wear purpose.",
  "sales_rep": 6779,
  "task_status": 7235,
  "task_update": "painting",
  "todo_desc_id": 3893,
  "todo_due_date": "security",
  "todo_type_id": 210
}
'

curl -X POST "localhost:8080/notes/7844" -H 'Content-Type: application/json' -d'
{
  "contact": 9221,
  "date": "2021-11-05",
  "id": 7844,
  "is_new_todo": 5041,
  "notes": "Staff film score style require wear purpose.",
  "sales_rep": 6779,
  "task_status": 7235,
  "task_update": "painting",
  "todo_desc_id": 3893,
  "todo_due_date": "security",
  "todo_type_id": 210
}
'

curl -X GET "localhost:8080/notes/7844"

curl -X DELETE "localhost:8080/notes/7844"

# --

curl -X GET "localhost:8080/roles"

curl -X POST "localhost:8080/roles" -H 'Content-Type: application/json' -d'
{
  "role": "sing"
}
'

curl -X POST "localhost:8080/roles/4370" -H 'Content-Type: application/json' -d'
{
  "id": 4370,
  "role": "sing"
}
'

curl -X GET "localhost:8080/roles/4370"

curl -X DELETE "localhost:8080/roles/4370"

# --

curl -X GET "localhost:8080/task-status"

curl -X POST "localhost:8080/task-status" -H 'Content-Type: application/json' -d'
{
  "status": "though"
}
'

curl -X POST "localhost:8080/task-status/8516" -H 'Content-Type: application/json' -d'
{
  "id": 8516,
  "status": "though"
}
'

curl -X GET "localhost:8080/task-status/8516"

curl -X DELETE "localhost:8080/task-status/8516"

# --

curl -X GET "localhost:8080/todo-desc"

curl -X POST "localhost:8080/todo-desc" -H 'Content-Type: application/json' -d'
{
  "description": "few"
}
'

curl -X POST "localhost:8080/todo-desc/6474" -H 'Content-Type: application/json' -d'
{
  "description": "few",
  "id": 6474
}
'

curl -X GET "localhost:8080/todo-desc/6474"

curl -X DELETE "localhost:8080/todo-desc/6474"

# --

curl -X GET "localhost:8080/todo-type"

curl -X POST "localhost:8080/todo-type" -H 'Content-Type: application/json' -d'
{
  "type": "around"
}
'

curl -X POST "localhost:8080/todo-type/8727" -H 'Content-Type: application/json' -d'
{
  "id": 8727,
  "type": "around"
}
'

curl -X GET "localhost:8080/todo-type/8727"

curl -X DELETE "localhost:8080/todo-type/8727"

# --

curl -X GET "localhost:8080/user-status"

curl -X POST "localhost:8080/user-status" -H 'Content-Type: application/json' -d'
{
  "status": "leader"
}
'

curl -X POST "localhost:8080/user-status/2138" -H 'Content-Type: application/json' -d'
{
  "id": 2138,
  "status": "leader"
}
'

curl -X GET "localhost:8080/user-status/2138"

curl -X DELETE "localhost:8080/user-status/2138"

# --

curl -X GET "localhost:8080/users"

curl -X POST "localhost:8080/users" -H 'Content-Type: application/json' -d'
{
  "email": "rodriguezalicia@example.org",
  "name_first": "worker",
  "name_last": "wrong",
  "name_middle": "ago",
  "name_title": "occur",
  "password": "price",
  "user_roles": 2337,
  "user_status": 3497
}
'

curl -X POST "localhost:8080/users/264" -H 'Content-Type: application/json' -d'
{
  "email": "rodriguezalicia@example.org",
  "id": 264,
  "name_first": "worker",
  "name_last": "wrong",
  "name_middle": "ago",
  "name_title": "occur",
  "password": "price",
  "user_roles": 2337,
  "user_status": 3497
}
'

curl -X GET "localhost:8080/users/264"

curl -X DELETE "localhost:8080/users/264"

# --

