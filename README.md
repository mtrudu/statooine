## Statooine

Training project for GraphQL course.

### Exercise 

1 - Build a simple graphql schema regarding the following domain rules:  

Project used to manipulate Euromillion draws.

- A draw has a date at least.
- A Draw is compose by a collection of numbers.
- A number has a value and a position.
- A number may be a star one or not.
- Star numbers values from 1 to 10.
- Non star numbers values from 1 to 50.
- A draw is composed by a set of 5 common numbers and 2 star numbers.

2 - Define a graphql query in order to get a draw by its date.

3 - Once your graphql schema is up with your query. Don't forget to compile it.
Now associate a resolver for your query and create the Resolver service.

4 - Add a ResolverMap

## Usefull commands
`make dev-start` 
Build the project then run it (with docker-compose)

`make dev-stop` 
Stop the project

`make db-setup` Set up the db (with fixtures \o/)

`make shell` A shell to statooine container

`make graphql-compile` Compile graphql files