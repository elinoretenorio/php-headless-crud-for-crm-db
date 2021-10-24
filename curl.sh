curl -X GET "localhost:8080/contact"

curl -X POST "localhost:8080/contact" -H 'Content-Type: application/json' -d'
{
  "address": "week",
  "address_city": "member",
  "address_country": "son",
  "address_state": "discuss",
  "address_street_1": "risk",
  "address_street_2": "international",
  "address_zip": 4474,
  "background_info": "Test term on worker soldier theory environmental science. Eye over military effort trade bar continue.",
  "budget": 158.827,
  "company": "fill",
  "contact_first": "outside",
  "contact_last": "always",
  "contact_middle": "hospital",
  "contact_title": "million",
  "date_of_initial_contact": "2021-11-21",
  "deliverables": "live",
  "email": "glovergeorge@example.net",
  "industry": "game",
  "lead_referral_source": "her",
  "linkedin_profile": "factor",
  "phone": "break",
  "project_description": "Allow either light free dark.",
  "project_type": "less",
  "proposal_due_date": "2021-11-15",
  "rating": 427.6405,
  "sales_rep": 8379,
  "status": 8446,
  "title": "half",
  "website": "save"
}
'

curl -X POST "localhost:8080/contact/7559" -H 'Content-Type: application/json' -d'
{
  "address": "week",
  "address_city": "member",
  "address_country": "son",
  "address_state": "discuss",
  "address_street_1": "risk",
  "address_street_2": "international",
  "address_zip": 4474,
  "background_info": "Test term on worker soldier theory environmental science. Eye over military effort trade bar continue.",
  "budget": 158.827,
  "company": "fill",
  "contact_first": "outside",
  "contact_last": "always",
  "contact_middle": "hospital",
  "contact_title": "million",
  "date_of_initial_contact": "2021-11-21",
  "deliverables": "live",
  "email": "glovergeorge@example.net",
  "id": 7559,
  "industry": "game",
  "lead_referral_source": "her",
  "linkedin_profile": "factor",
  "phone": "break",
  "project_description": "Allow either light free dark.",
  "project_type": "less",
  "proposal_due_date": "2021-11-15",
  "rating": 427.6405,
  "sales_rep": 8379,
  "status": 8446,
  "title": "half",
  "website": "save"
}
'

curl -X GET "localhost:8080/contact/7559"

curl -X DELETE "localhost:8080/contact/7559"

# --

curl -X GET "localhost:8080/contact-status"

curl -X POST "localhost:8080/contact-status" -H 'Content-Type: application/json' -d'
{
  "status": "success"
}
'

curl -X POST "localhost:8080/contact-status/9535" -H 'Content-Type: application/json' -d'
{
  "id": 9535,
  "status": "success"
}
'

curl -X GET "localhost:8080/contact-status/9535"

curl -X DELETE "localhost:8080/contact-status/9535"

# --

curl -X GET "localhost:8080/notes"

curl -X POST "localhost:8080/notes" -H 'Content-Type: application/json' -d'
{
  "contact": 4207,
  "date": "2021-11-20",
  "is_new_todo": 5417,
  "notes": "Class and school list season record.",
  "sales_rep": 4587,
  "task_status": 3009,
  "task_update": "talk",
  "todo_desc_id": 8367,
  "todo_due_date": "later",
  "todo_type_id": 7589
}
'

curl -X POST "localhost:8080/notes/7101" -H 'Content-Type: application/json' -d'
{
  "contact": 4207,
  "date": "2021-11-20",
  "id": 7101,
  "is_new_todo": 5417,
  "notes": "Class and school list season record.",
  "sales_rep": 4587,
  "task_status": 3009,
  "task_update": "talk",
  "todo_desc_id": 8367,
  "todo_due_date": "later",
  "todo_type_id": 7589
}
'

curl -X GET "localhost:8080/notes/7101"

curl -X DELETE "localhost:8080/notes/7101"

# --

curl -X GET "localhost:8080/roles"

curl -X POST "localhost:8080/roles" -H 'Content-Type: application/json' -d'
{
  "role": "boy"
}
'

curl -X POST "localhost:8080/roles/5014" -H 'Content-Type: application/json' -d'
{
  "id": 5014,
  "role": "boy"
}
'

curl -X GET "localhost:8080/roles/5014"

curl -X DELETE "localhost:8080/roles/5014"

# --

curl -X GET "localhost:8080/task-status"

curl -X POST "localhost:8080/task-status" -H 'Content-Type: application/json' -d'
{
  "status": "poor"
}
'

curl -X POST "localhost:8080/task-status/6490" -H 'Content-Type: application/json' -d'
{
  "id": 6490,
  "status": "poor"
}
'

curl -X GET "localhost:8080/task-status/6490"

curl -X DELETE "localhost:8080/task-status/6490"

# --

curl -X GET "localhost:8080/todo-desc"

curl -X POST "localhost:8080/todo-desc" -H 'Content-Type: application/json' -d'
{
  "description": "room"
}
'

curl -X POST "localhost:8080/todo-desc/266" -H 'Content-Type: application/json' -d'
{
  "description": "room",
  "id": 266
}
'

curl -X GET "localhost:8080/todo-desc/266"

curl -X DELETE "localhost:8080/todo-desc/266"

# --

curl -X GET "localhost:8080/todo-type"

curl -X POST "localhost:8080/todo-type" -H 'Content-Type: application/json' -d'
{
  "type": "court"
}
'

curl -X POST "localhost:8080/todo-type/2308" -H 'Content-Type: application/json' -d'
{
  "id": 2308,
  "type": "court"
}
'

curl -X GET "localhost:8080/todo-type/2308"

curl -X DELETE "localhost:8080/todo-type/2308"

# --

curl -X GET "localhost:8080/user-status"

curl -X POST "localhost:8080/user-status" -H 'Content-Type: application/json' -d'
{
  "status": "best"
}
'

curl -X POST "localhost:8080/user-status/1778" -H 'Content-Type: application/json' -d'
{
  "id": 1778,
  "status": "best"
}
'

curl -X GET "localhost:8080/user-status/1778"

curl -X DELETE "localhost:8080/user-status/1778"

# --

curl -X GET "localhost:8080/users"

curl -X POST "localhost:8080/users" -H 'Content-Type: application/json' -d'
{
  "email": "barrettjamie@example.com",
  "name_first": "dark",
  "name_last": "painting",
  "name_middle": "apply",
  "name_title": "economy",
  "password": "everything",
  "user_roles": 7511,
  "user_status": 5682
}
'

curl -X POST "localhost:8080/users/8549" -H 'Content-Type: application/json' -d'
{
  "email": "barrettjamie@example.com",
  "id": 8549,
  "name_first": "dark",
  "name_last": "painting",
  "name_middle": "apply",
  "name_title": "economy",
  "password": "everything",
  "user_roles": 7511,
  "user_status": 5682
}
'

curl -X GET "localhost:8080/users/8549"

curl -X DELETE "localhost:8080/users/8549"

# --

