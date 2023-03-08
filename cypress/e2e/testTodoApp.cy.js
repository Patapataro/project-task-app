describe('todoApp', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:8000/')
  })

  it('displays title of the app', () => {
    cy.contains('CREATE A PROJECT')
  })

  it('can create new projects', () => {
    const newProject = 'Replace TickTock'

    cy.get('[data-cy="new-project-input"]').type(`${newProject}`)

    cy.get('[data-cy="new-project-submit"]').click()

    cy.get('[data-cy="projects"]').contains(`${newProject}`)
  })

  it('can create tasks', () => {
    const newProject = 'Replace TickTock'
    const taskName = 'Delete TickTock'

    cy.get('[data-cy="projects"]').select(`${newProject}`)

    cy.get('[data-cy="new-task-input"]').type(`${taskName}`)

    cy.get('[data-cy="new-task-submit"]').click()

    cy.contains(`${taskName}`)
  })

  it('can delete tasks', () => {
    const taskName = 'Delete TickTock'

    cy.get('[data-cy="delete-project"]').click()

    cy.get('[data-cy="task-list"]').should('not.contain', `${taskName}`)
  })

  it('can delete a project', () => {
    const newProject = 'Replace TickTock'

    cy.get('[data-cy="projects"]').select(`${newProject}`)

    cy.get('[data-cy="delete-project"]').click()

  })
})