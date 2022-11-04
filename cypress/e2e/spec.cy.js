describe('Visit site', () => {
  it('passes', () => {
    cy.visit('https://www.amazon.co.uk')
  })
})

describe('Test Action on Button', () => {
  it('passes', () => {
    cy.get('#sp-cc-accept')
    .click()
  })
})

describe('Check text in p element', () => {
  it('Contains correct line', () => {
    cy.get('span.nav-line-2')
    .invoke('text')
    .should('equal','Account & Lists')
  })
})

describe('Test Action Login Button', () => {
  it('passes', () => {
    cy.get('#nav-link-accountList-nav-line-1')
    .click()
  })
})

describe('Enter Sign-in username', () => {
  it('passes', () => {
    cy.get('#ap_email')
    .type('ioanaandrapopovici@gmail.com')
    .should('have.value', 'ioanaandrapopovici@gmail.com')
  })
})


describe('Click continue in sign-in process', () => {
  it('passes', () => {
    cy.get('#continue')
    .click()
  })
})


