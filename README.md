# Centralized usermanager panel prototype
##Common DB structure
| users |
| ---- |
| ID |
| Name |
| Alias |
| Type |
| Email |
| Password |
| Skype |
| Jabber |
| ICQ |
| Comment |
| CreatedAt |
| UpdatedAt |
| Held |
| Enabled |
| Deleted |

| allowed_networks |
| ---- |
| ID |
| Type |
| Value |
| Comment |
| CreatedAt |
| UpdatedAt |
| Enabled |
| Deleted |

| servers |
| ---- |
| ID |
| UserID |
| Name |
| Alias |
| Type |
| Hostname |
| IPaddr |
| Comment |
| CreatedAt |
| UpdatedAt |
| Enabled |
| Deleted |
| AllowedNetworkID |

| logs |
| ---- |
| ID |
| Type |
| Value |
| UserID |
| Comment |
| CreatedAt |

