Feature: Knp menu
  In order to add a sexy menus to site
  As a Symfony2 developer
  I need to be able to use KnpMenuBundle

  Scenario: There is a "Inicio" link on home page
    Given I am on "/"
    Then I should see "Inicio"

  Scenario: User clicks on ... with Bob link
    Given I am on "/"
    When I follow "Blog"
    And I follow "Proyectos"
    And I follow "Personas"
    And I follow "Inicio"
    Then I should see "¿Quiénes somos?"
