describe('empty spec', () => {
            it('passes', () => {
              cy.visit('http://127.0.0.1:8000/login')
              cy.get('.me-1 > .btn').click()
              cy.get('#form2Example18').type('rijun@gmail.com')
            //   cy.get('#form2Example28').type('rijun')
            //   cy.get(':nth-child(1) > .card > .card-body > form > :nth-child(4) > #name').type('rijun')
              cy.get('#password').type('rijunlove')
              cy.get('.me-1 > .btn').click()
            //   cy.get('.me-1 > .btn').click()
            //   cy.get(':nth-child(1) > .card > .card-body > form > .btn').click()
          
            })
          })

          