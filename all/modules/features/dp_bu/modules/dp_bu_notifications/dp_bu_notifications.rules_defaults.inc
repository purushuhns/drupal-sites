<?php
/**
 * @file
 * dp_bu_notifications.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function dp_bu_notifications_default_rules_configuration() {
  $items = array();
  $items['og_bu_member_subscribe_active_'] = entity_import('rules_config', '{ "og_bu_member_subscribe_active_" : {
      "LABEL" : "BU member subscribe (Active)",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Business Unit" ],
      "REQUIRES" : [ "rules", "og" ],
      "ON" : { "og_user_approved" : [], "og_user_insert" : [] },
      "IF" : [
        { "entity_is_of_type" : { "entity" : [ "og-membership:group" ], "type" : "node" } },
        { "entity_is_of_bundle" : {
            "entity" : [ "og-membership:group" ],
            "type" : "node",
            "bundle" : { "value" : { "business_unit" : "business_unit" } }
          }
        },
        { "data_is" : { "data" : [ "og-membership:state" ], "value" : "1" } }
      ],
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "node", "value" : [ "og-membership:group" ] },
            "PROVIDE" : { "variable_added" : { "group" : "Added variable" } }
          }
        },
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "site:current-user" ] },
            "PROVIDE" : { "variable_added" : { "current_user" : "Current User" } }
          }
        },
        { "mail" : {
            "to" : [ "account:mail" ],
            "subject" : "You have been added to \\u0022[group:title]\\u0022 Business Unit\\r\\n",
            "message" : "Dear [account:field-first-name] [account:field-last-name],\\r\\n\\r\\nYou have been added to \\u0022[group:title]\\u0022 Business Unit.\\r\\nThe address of \\u0022[group:title]\\u0022 is [group:url].",
            "language" : [ "" ]
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "group" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with role in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[account:field-first-name] [account:field-last-name] joined \\u0022[group:title]\\u0022",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n[account:field-first-name] [account:field-last-name] ([account:name]) has been added to \\u0022[group:title]\\u0022 Business Unit by [current-user:field-first-name] [current-user:field-last-name] ([current-user:name]).\\r\\nThe address of \\u0022[group:title]\\u0022 is [group:url].",
                  "language" : [ "" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['og_bu_member_subscribe_blocked_'] = entity_import('rules_config', '{ "og_bu_member_subscribe_blocked_" : {
      "LABEL" : "BU member subscribe (Blocked)",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Business Unit" ],
      "REQUIRES" : [ "rules", "og" ],
      "ON" : { "og_user_blocked" : [] },
      "IF" : [
        { "entity_is_of_type" : { "entity" : [ "og-membership:group" ], "type" : "node" } },
        { "entity_is_of_bundle" : {
            "entity" : [ "og-membership:group" ],
            "type" : "node",
            "bundle" : { "value" : { "business_unit" : "business_unit" } }
          }
        }
      ],
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "node", "value" : [ "og-membership:group" ] },
            "PROVIDE" : { "variable_added" : { "group" : "Added variable" } }
          }
        },
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "site:current-user" ] },
            "PROVIDE" : { "variable_added" : { "current_user" : "Current User" } }
          }
        },
        { "mail" : {
            "to" : [ "account:mail" ],
            "subject" : "Your membership has been blocked in \\u0022[group:title]\\u0022\\r\\n",
            "message" : "Dear [account:field-first-name] [account:field-last-name],\\r\\n\\r\\nYour membership in \\u0022[group:title]\\u0022 Business Unit has been blocked.",
            "language" : [ "" ]
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "group" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with role in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[account:field-first-name] [account:field-last-name] has been removed from \\u0022[group:title]\\u0022\\r\\n",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n[account:field-first-name] [account:field-last-name] ([account:name]) membership in \\u0022[group:title]\\u0022 Business Unit has been blocked by [current-user:field-first-name] [current-user:field-last-name] ([current-user:name]).\\r\\nThe address of \\u0022[group:title]\\u0022 is [group:url].\\r\\n",
                  "language" : [ "" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['og_bu_member_subscribe_pending_'] = entity_import('rules_config', '{ "og_bu_member_subscribe_pending_" : {
      "LABEL" : "BU member subscribe (Pending)",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Business Unit" ],
      "REQUIRES" : [ "rules", "og" ],
      "ON" : { "og_user_insert" : [] },
      "IF" : [
        { "data_is" : { "data" : [ "og-membership:state" ], "value" : "2" } },
        { "entity_is_of_type" : { "entity" : [ "og-membership:group" ], "type" : "node" } },
        { "entity_is_of_bundle" : {
            "entity" : [ "og-membership:group" ],
            "type" : "node",
            "bundle" : { "value" : { "business_unit" : "business_unit" } }
          }
        }
      ],
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "node", "value" : [ "og-membership:group" ] },
            "PROVIDE" : { "variable_added" : { "group" : "Added variable" } }
          }
        },
        { "mail" : {
            "to" : [ "account:mail" ],
            "subject" : "Your membership request for \\u0022[group:title]\\u0022 is pending approval\\r\\n",
            "message" : "Dear [account:field-first-name] [account:field-last-name],\\r\\n\\r\\nYour membership request to \\u0022[group:title]\\u0022 Business Unit is pending approval.",
            "language" : [ "" ]
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "group" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with role in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[account:field-first-name] [account:field-last-name] has requested membership to \\u0022[group:title]\\u0022\\r\\n",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n[account:field-first-name] [account:field-last-name] ([account:name]) requested a membership to \\u0022[group:title]\\u0022 Business Unit.\\r\\nThe address of \\u0022[group:title]\\u0022 is [group:url].\\r\\n\\r\\n[og_membership:og-membership-request]",
                  "language" : [ "" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['og_og_bu_member_removed'] = entity_import('rules_config', '{ "og_og_bu_member_removed" : {
      "LABEL" : "BU member removed",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Business Unit" ],
      "REQUIRES" : [ "rules", "og" ],
      "ON" : { "og_user_delete" : [] },
      "IF" : [
        { "entity_is_of_type" : { "entity" : [ "og-membership:group" ], "type" : "node" } },
        { "entity_is_of_bundle" : {
            "entity" : [ "og-membership:group" ],
            "type" : "node",
            "bundle" : { "value" : { "business_unit" : "business_unit" } }
          }
        }
      ],
      "DO" : [
        { "variable_add" : {
            "USING" : { "type" : "node", "value" : [ "og-membership:group" ] },
            "PROVIDE" : { "variable_added" : { "group" : "Added variable" } }
          }
        },
        { "variable_add" : {
            "USING" : { "type" : "user", "value" : [ "site:current-user" ] },
            "PROVIDE" : { "variable_added" : { "current_user" : "Current User" } }
          }
        },
        { "mail" : {
            "to" : [ "account:mail" ],
            "subject" : "You have been removed from \\u0022[group:title]\\u0022\\r\\n",
            "message" : "Dear [account:field-first-name] [account:field-last-name],\\r\\n\\r\\nYou have been removed from \\u0022[group:title]\\u0022 Business Unit.",
            "language" : [ "" ]
          }
        },
        { "og_get_members_with_role_in_group" : {
            "USING" : {
              "group" : [ "group" ],
              "og_role" : { "value" : {
                  "administrator member" : "administrator member",
                  "product manager" : "product manager"
                }
              }
            },
            "PROVIDE" : { "group_members_with_role_in_group" : { "group_members_with_role_in_group" : "List of group members with role in group" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "group-members-with-role-in-group" ] },
            "ITEM" : { "member" : "Member with role" },
            "DO" : [
              { "mail" : {
                  "to" : [ "member:mail" ],
                  "subject" : "[account:field-first-name] [account:field-last-name] has been removed from \\u0022[group:title]\\u0022\\r\\n",
                  "message" : "Dear [member:field-first-name] [member:field-last-name],\\r\\n\\r\\n[account:field-first-name] [account:field-last-name] ([account:name]) has been removed from \\u0022[group:title]\\u0022 Business Unit by [current-user:field-first-name] [current-user:field-last-name] ([current-user:name]).\\r\\nThe address of \\u0022[group:title]\\u0022 is [group:url].\\r\\n",
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
