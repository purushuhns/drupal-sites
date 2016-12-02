<?php
/**
 * @file
 * dp_bu_app_dashboard_notifications.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function dp_bu_app_dashboard_notifications_default_rules_configuration() {
  $items = array();
  $items['rules_bu_app_dashboard_app_created_pending_approval_'] = entity_import('rules_config', '{ "rules_bu_app_dashboard_app_created_pending_approval_" : {
      "LABEL" : "BU App dashboard: App created (pending approval)",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "App dasboard", "Business Unit" ],
      "REQUIRES" : [ "rules", "dp_bu", "og", "devconnect_developer_apps" ],
      "ON" : { "devconnect_developer_app_create" : [] },
      "IF" : [
        { "data_is" : { "data" : [ "app:overallStatus" ], "value" : "pending" } }
      ],
      "DO" : [
        { "dp_bu_rules_get_bus_of_developer_app" : {
            "USING" : { "app_entity" : [ "app" ] },
            "PROVIDE" : { "bus_of_app" : { "bus_of_app" : "List of Business Units" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "bus-of-app" ] },
            "ITEM" : { "bu" : "Business Unit" },
            "DO" : [
              { "og_get_members_with_role_in_group" : {
                  "USING" : {
                    "group" : [ "bu" ],
                    "og_role" : { "value" : {
                        "administrator member" : "administrator member",
                        "product manager" : "product manager"
                      }
                    }
                  },
                  "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with selected role(s) in group" } }
                }
              },
              { "LOOP" : {
                  "USING" : { "list" : [ "group-members-with-role-in-group" ] },
                  "ITEM" : { "member" : "Member with role" },
                  "DO" : [
                    { "variable_add" : {
                        "USING" : { "type" : "user", "value" : [ "app:developer" ] },
                        "PROVIDE" : { "variable_added" : { "developer" : "Developer" } }
                      }
                    },
                    { "mail" : {
                        "to" : [ "member:mail" ],
                        "subject" : "[app:displayName] app\\u0027s credentials are waiting for approval for [product:displayName]",
                        "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n\\u0022[app:displayName]\\u0022 developer app\\u0027s credentials are waiting for approval for [product:displayName] API Product. Developer of app: [developer:field-first-name] [developer:field-last-name] ([developer:name]).\\r\\n\\r\\nYou can approve the credentials of this app on [site:url]app-dashboard.",
                        "language" : [ "" ]
                      }
                    }
                  ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['rules_bu_app_dashboard_apps_credentials_approved_for_a_product'] = entity_import('rules_config', '{ "rules_bu_app_dashboard_apps_credentials_approved_for_a_product" : {
      "LABEL" : "BU App dashboard: App\\u0027s credentials got approved for an API Product",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "App dasboard", "Business Unit" ],
      "REQUIRES" : [ "rules", "dp_bu", "og", "dp_app_dashboard" ],
      "ON" : { "dp_app_dashboard_app_credentials_approved" : [] },
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "site:current-user" ] },
            "PROVIDE" : { "variable_added" : { "current_user" : "Current User" } }
          }
        },
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "app:developer" ] },
            "PROVIDE" : { "variable_added" : { "developer" : "Developer" } }
          }
        },
        { "mail" : {
            "to" : [ "app:developer:mail" ],
            "subject" : "[app:displayName] app\\u0027s credentials has been approved for [product:displayName]",
            "message" : "Dear [developer:field-first-name] [developer:field-last-name],\\r\\n\\r\\nYour \\u0022[app:displayName]\\u0022 developer app\\u0027s credentials has been approved for [product:displayName] API Product. You can use these credentials to communicate with any APIs which belongs to this API Product from now.\\r\\n",
            "language" : [ "" ]
          }
        },
        { "dp_bu_rules_get_bu_of_api_product" : {
            "USING" : { "app_entity" : [ "product" ] },
            "PROVIDE" : { "bu_node" : { "bu_node" : "Business Unit (node)" } }
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "bu-node" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with selected role(s) in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[app:displayName] app\\u0027s credentials have been approved for [product:displayName]",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n\\u0022[app:displayName]\\u0022 developer app of [developer:field-first-name] [developer:field-last-name] ([developer:name]) have been approved for [product:displayName] by [current-user:field-first-name] [current-user:field-last-name] ([current-user:name]).\\r\\n\\r\\nYou can revoke the credentials of this app on [site:url]app-dashboard.",
                  "language" : [ "" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['rules_bu_app_dashboard_apps_credentials_revoked_for_a_product'] = entity_import('rules_config', '{ "rules_bu_app_dashboard_apps_credentials_revoked_for_a_product" : {
      "LABEL" : "BU App dashboard: App\\u0027s credentials got revoked for an API Product",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "App dasboard", "Business Unit" ],
      "REQUIRES" : [ "rules", "dp_bu", "og", "dp_app_dashboard" ],
      "ON" : { "dp_app_dashboard_app_credentials_revoked" : [] },
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "site:current-user" ] },
            "PROVIDE" : { "variable_added" : { "current_user" : "Current User" } }
          }
        },
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "app:developer" ] },
            "PROVIDE" : { "variable_added" : { "developer" : "Developer" } }
          }
        },
        { "mail" : {
            "to" : [ "app:developer:mail" ],
            "subject" : "[app:displayName] app\\u0027s credentials has been revoked for [product:displayName]",
            "message" : "Dear [developer:field-first-name] [developer:field-last-name],\\r\\n\\r\\nYour \\u0022[app:displayName]\\u0022 developer app\\u0027s credentials has been revoked for [product:displayName] API Product. You cannot use these credentials to communicate with any APIs which belongs to this API Product from now.\\r\\n",
            "language" : [ "" ]
          }
        },
        { "dp_bu_rules_get_bu_of_api_product" : {
            "USING" : { "app_entity" : [ "product" ] },
            "PROVIDE" : { "bu_node" : { "bu_node" : "Business Unit (node)" } }
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "bu-node" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with selected role(s) in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[app:displayName] app\\u0027s credentials have been revoked for [product:displayName]",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n\\u0022[app:displayName]\\u0022 developer app of [developer:field-first-name] [developer:field-last-name] ([developer:name]) have been revoked for [product:displayName] by [current-user:field-first-name] [current-user:field-last-name] ([current-user:name]).\\r\\n\\r\\nYou can approve the credentials of this app on [site:url]app-dashboard.",
                  "language" : [ "" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  return $items;
}
